<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortofolioController extends Controller
{
    public function getProfile(): array
    {
        // backward-compat wrapper (file exists previously)
        return app(PortfolioController::class)->getProfile();
    }

    public function getStats(): array
    {
        return app(PortfolioController::class)->getStats();
    }

    public function getProjects(): array
    {
        return app(PortfolioController::class)->getProjects();
    }

    public function getSkills(): array
    {
        return app(PortfolioController::class)->getSkills();
    }

    public function getExperiences(): array
    {
        return app(PortfolioController::class)->getExperiences();
    }

    public function dashboard()
    {
        return app(PortfolioController::class)->dashboard();
    }

    public function about()
    {
        return app(PortfolioController::class)->about();
    }

    public function projects()
    {
        return app(PortfolioController::class)->projects();
    }

    public function skills()
    {
        return app(PortfolioController::class)->skills();
    }

    public function experience()
    {
        return app(PortfolioController::class)->experience();
    }

    public function contact()
    {
        return app(PortfolioController::class)->contact();
    }
}

